<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?=$title?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url('dashboard/index')?>"><i class="fa fa-dashboard"></i> 首页</a></li>
      <li class="active"><?=$title?></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title"><?=$title?></h3>
        <div class="box-tools pull-right">
          <a class="btn btn-sm btn-info" href="add">添加</a>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <table class="table table-hover table-striped table-bordered">
          <thead>
            <tr>
              <th>订单号</th>
              <th>状态</th>
              <th>金额</th>
              <th>日期</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($result as $item):?>
              <tr>
                <td><?php echo $item->get('objectId');?></td>
                <td><?php echo $item->get('status') == 0 ? '待付款' : '已付款';?></td>
                <td><?=$item->get('amount')?></td>
                <td><?=$item->get('updatedAt')->setTimeZone(new DateTimeZone("PRC"))->format('Y-m-d H:i:s');?></td>
                <td><button class="btn btn-primary">发货</button></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
      <div class="box-footer">
      <?=$pagination;?>
      </div><!-- box-footer -->
    </div><!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<script>
  $(function () { 
    $("[data-toggle='popover']").popover();
  });
</script>