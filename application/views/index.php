<?php $this->load->view('common/header'); ?>
<div id="content" class="col-lg-10 col-sm-10">
    <!-- 面包屑导航开始 -->
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    Dashboard
                </a>
            </li>
        </ul>
    </div>
    <!-- 面包屑导航结束 -->
</div>
<script>
    $('#button').click(function(){
        alert(123);
    })
</script>
<?php $this->load->view('common/footer'); ?>