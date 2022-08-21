<?php

namespace App\Service;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class ModelFilterService
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $filterRules
     * @param array $filterData
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function filterEntries(Builder $query, array $filterRules, array $filterData): Builder
    {
        foreach ($filterRules as $columnName => $searchType) {
            if (empty($filterData[$columnName])) {
                continue;
            }

            $query = self::addFilter($query, $columnName, $searchType, $filterData[$columnName]);
        }

        if (!empty($filterData['sort'])) {
            if ($filterData['order'] ?? 'asc' === 'desc') {
                $query->orderByDesc($filterData['sort']);
            } else {
                $query->orderBy($filterData['sort']);
            }
        }

        return $query;
    }

    private static function addFilter(Builder $query, string $columnName, string $searchType, mixed $search): Builder
    {
        return match ($searchType) {
            'match' => $query->where($columnName, $search),
            'prefix' => $query->where($columnName, 'like', $search . '%'),
            'suffix' => $query->where($columnName, 'like', '%' . $search),
            'contains' => $query->where($columnName, 'like', '%' . $search . '%'),
            'range' => $query->whereBetween($columnName, $search),
            default => $query,
        };
    }

    public static function apiPaginate(Builder $query): array
    {
        $paginator = $query->paginate(25)->withQueryString();

        return [
            'items' => $paginator->items(),
            'meta' => [
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
                'per_page' => $paginator->perPage(),
                'item_count' => $paginator->total()
            ],
            'links' => [
                'prev_page_url' => $paginator->previousPageUrl(),
                'next_page_url' => $paginator->nextPageUrl()
            ]
        ];
    }
}
