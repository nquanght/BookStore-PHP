
<div class="card-footer clearfix">
    <?= $this->pagination->showPaginationBackend(URL::createLink($this->arrParam['module'], $this->arrParam['controller'], 'index', ['filter_group_acp' => @$this->arrParam['filter_group_acp'], 'status' => (@$this->arrParam['status']) ?? 'all', 'search_value' => @$this->arrParam['search_value']]))?>
    <!-- <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item disabled"><a href="" class="page-link"><i class="fas fa-angle-double-left"></i></a></li>
        <li class="page-item disabled"><a href="" class="page-link"><i class="fas fa-angle-left"></i></a></li>
        <li class="page-item active"><a class="page-link">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
    </ul> -->
</div>
