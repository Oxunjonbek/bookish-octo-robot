<?php

namespace App\DataTables;

// use App\Models\UsersDataTable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use APP\Models\User;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'usersdatatable.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\UsersDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    // public function query(UsersDataTable $model)
    // {
    //     return $model->newQuery();
    // }
    public function query()
    {
        $users = User::select();
    
        return $this->applyScopes($users);
    }


    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('usersdatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    // public function html()
    // {
    //     return $this->builder()
    //         ->columns([
    //             'id',
    //             'name',
    //             'email',
    //             // 'age',
    //             // 'TCKN',
    //             // 'status',
    //             // 'created_at',
    //             // 'updated_at',
    //         ])
    //         ->parameters([
    //             'dom' => 'Bfrtip',
    //             'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
    //         ]);
    // }


    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('name')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            // Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }

    public function ajax()
    {
        return $this->datatables->eloquent($this->query())->make(true);
    }

}
