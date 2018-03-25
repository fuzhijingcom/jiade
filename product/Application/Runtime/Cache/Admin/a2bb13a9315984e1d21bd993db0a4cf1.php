<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>选择<?php echo ($title); ?>产品</title>
    <link rel="stylesheet" href="//cdn.c3w.com.cn/css/weui.min.css"/>
    <script src="//cdn.c3w.com.cn/js/jquery-1.10.2.min.js"></script>
</style>
</head>

<body>

    <div class="page">
    <div class="page__hd">
        <h1 class="page__title"><center><?php echo ($title); ?></center></h1>
        <p class="page__desc"><center>选择4个显示在首页</center></p>
    </div>
    <div class="page__bd">
        

    <form id="form" method="POST" action="<?php echo U('xuanze_add');?>">
        <input type="hidden" name="id" value="<?php echo ($id); ?>" />

        <div class="weui-cells__title">只能选择4个</div>
        <div class="weui-cells weui-cells_checkbox">

<?php if(is_array($list)): foreach($list as $key=>$v): ?><label class="weui-cell weui-check__label" for="s<?php echo ($v["id"]); ?>">
                <div class="weui-cell__hd">
                    <input type="checkbox" class="weui-check" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["id"]); ?>" id="s<?php echo ($v["id"]); ?>">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p><?php echo ($v["post_title"]); ?></p>
                </div>
            </label><?php endforeach; endif; ?>

        </div>


        <div class="weui-btn-area">
            <a class="weui-btn weui-btn_primary" href="javascript:submit();">保存</a>
        </div>

    </form>

    </div>
   
</div>


<script type="text/javascript">
    $(" #check ").live('input propertychange', function()
     {
         var check = $(" #check ").val();
         
         alert(check);
        //  if( total_amount == ''){
        //      total_amount = 0;
        //  }
       

     });
        
</script>



<script>
    function submit(){
       
        var form = document.getElementById('form');
        //再次修改input内容

        form.submit();
    }
</script>
</body>
</html>