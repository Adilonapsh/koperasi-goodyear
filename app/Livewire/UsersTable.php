<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchDebounce(1000);
        // $this->setRefreshVisible();
    }

    public function bulkActions(): array
    {
        return [
            'export' => 'Export',
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->searchable()
                ->sortable(),
            Column::make("Name", "name")
                ->secondaryHeader(function ($rows) {
                    return 'Subtotal: ';
                })
                ->footer(function ($rows) {
                    return 'Subtotal: ' . $rows->sum('price');
                })
                ->searchable()
                ->sortable(),
            Column::make("Email", "email")
                ->searchable()
                ->sortable(),
            Column::make("Username", "username")
                ->searchable()
                ->sortable(),
            Column::make("Cc", "cc")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->collapseAlways()
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->collapseAlways()
                ->sortable(),

            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                        ->title(fn ($row) => 'View ')
                        ->location(fn ($row) => "")
                        ->attributes(function ($row) {
                            return [
                                'class' => 'underline text-blue-500 hover:no-underline',
                            ];
                        }),
                    LinkColumn::make('Edit')
                        ->title(fn ($row) => 'Edit ')
                        ->location(fn ($row) => "")
                        ->attributes(function ($row) {
                            return [
                                'target' => '_blank',
                                'class' => 'underline text-blue-500 hover:no-underline',
                            ];
                        }),
                ]),
        ];
    }
}
