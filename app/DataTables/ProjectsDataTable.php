<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\Project;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProjectsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $page = "projects";
        return datatables()
            ->eloquent($query)
            ->addColumn('Category',function ($data) use ($page) {
                $temp = Category::find($data->category_id);
                return $data->Category = $temp->title;
            })
            ->addColumn('action', function ($data) use ($page) {
                return view('admin/components/datatable/actions', compact("data", "page"));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Project $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Project $model)
    {
        return $model->newQuery()->where('project_type_id', $this->id);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->rowId("id")
            ->setTableId('dataTable')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->paging(true)
            ->info()
            ->dom('Blfrtip')
            ->lengthMenu([10, 25, 50 ,100])
            ->orderBy(7, "asce")
            ->buttons(
                Button::make('reset'),
                Button::make('reload'),
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title('ID'),
            Column::make('title'),
            Column::make('description'),
            Column::make('case_study')->title('Case Study'),
            Column::make('location'),
            Column::make('Category'),
            Column::make('created_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),
            Column::make('position')->visible(false),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Projects_' . date('YmdHis');
    }
}
