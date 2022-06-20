<?php

namespace App\DataTables;

use App\Models\Career;
use App\Models\Job;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CareersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $page = "careers";
        return datatables()
            ->eloquent($query)
            ->addColumn('seen',function ($data) use ($page) {
                if ($data->seen){
                    $data->seen = "Yes";
                }
                else{
                    $data->seen = "No";
                }
                return $data->seen;
            })
            ->addColumn('Job',function ($data) use ($page) {
                $temp = Job::find($data->job_id);
                return $data->Job = $temp->title;
            })
            ->addColumn('action', function ($data) use ($page) {
                return view('admin/components/datatable/actions', compact("data", "page"));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Career $model
     * @return Builder
     */
    public function query(Career $model): Builder
    {
        if($this->job_id == 0){
            return $model->newQuery();
        }
        else{
            return $model->newQuery()->where('job_id',$this->job_id);
        }
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
            ->orderBy(8, "asce")
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
            Column::make('full_name'),
            Column::make('phone'),
            Column::make('Job'),
            Column::make('email'),
            Column::make('seen'),
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
        return 'Careers_' . date('YmdHis');
    }
}
