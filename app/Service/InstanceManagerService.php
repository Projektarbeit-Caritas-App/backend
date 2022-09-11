<?php

namespace App\Service;

use App\Models\Instance;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator as Validation;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Validator;
use ValueError;

class InstanceManagerService
{
    public static function printSingleInstanceToConsole(Command $command, string $instance_id): Instance
    {
        $instance = Instance::withCount([
            'cards',
            'limitationSets',
            'organizations',
            'productTypes',
            'shops',
            'users'
        ])->findOrFail($instance_id);

        $command->line('<info>      ID: </info>' . $instance->id);
        $command->line('<info>    Name: </info>' . $instance->name);
        $command->line('<info>  Street: </info>' . $instance->street);
        $command->line('<info>Postcode: </info>' . $instance->postcode);
        $command->line('<info>    City: </info>' . $instance->city);
        $command->line('<info> Contact: </info>' . $instance->contact);
        $command->line('<info> Created: </info>' . $instance->created_at->format('G:i \o\n l jS F Y'));
        $command->line('<info> Updated: </info>' . $instance->updated_at->format('G:i \o\n l jS F Y'));
        $command->newLine();

        $command->info('This instance contains...');
        $command->line(sprintf('%4d <info>cards</info>', $instance->cards_count));
        $command->line(sprintf('%4d <info>limitation sets</info>', $instance->limitation_sets_count));
        $command->line(sprintf('%4d <info>organizations</info>', $instance->organizations_count));
        $command->line(sprintf('%4d <info>product types</info>', $instance->product_types_count));
        $command->line(sprintf('%4d <info>shops</info>', $instance->shops_count));
        $command->line(sprintf('%4d <info>users</info>', $instance->users_count));

        return $instance;
    }

    public static function askForInstanceDetails(Command $command, ?Instance $instance = null): array
    {
        $data['name']     = $command->ask('Name', $instance?->name);
        $data['street']   = $command->ask('Street', $instance?->street);
        $data['postcode'] = $command->ask('Postcode', $instance?->postcode);
        $data['city']     = $command->ask('City', $instance?->city);
        $data['contact']  = $command->ask('Contact', $instance?->contact);
        $command->newLine();

        $validator = Validation::make([
            'name' => $data['name'],
            'street' => $data['street'],
            'postcode' => $data['postcode'],
            'city' => $data['city'],
            'contact' => $data['contact']
        ], [
            'name' => 'string|max:125|required',
            'street' => 'string|max:125|required',
            'postcode' => 'string|max:125|required',
            'city' => 'string|max:125|required',
            'contact' => 'string|required'
        ]);

        self::checkForFailedValidator($command, $validator);
        return $data;
    }

    public static function askForUserDetails(Command $command): array
    {
        $data['username']         = $command->ask('Name');
        $data['email']            = $command->ask('E-Mail');
        $data['password']         = $command->secret('Password');
        $data['password_confirm'] = $command->secret('Confirm Password');
        $command->newLine();

        $validator = Validation::make([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'password_confirmation' => $data['password_confirm']
        ], [
            'username' => 'string|max:125|required',
            'email' => 'email:rfc,dns|max:125|required',
            'password' => ['string', 'confirmed', 'required', Password::defaults()],
        ]);

        self::checkForFailedValidator($command, $validator);
        return $data;
    }

    private static function checkForFailedValidator(Command $command, Validator $validator): void
    {
        if ($validator->fails()) {
            $command->warn('The following errors where found:');

            foreach ($validator->errors()->all() as $error) {
                $command->error($error);
            }

            $command->newLine();
            $command->warn('Aborting...');

            throw new ValueError($validator->fails());
        }
    }
}
