<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<style type="text/css">
table {
  border-collapse: collapse;
  border-spacing: 0;
  table-layout: fixed;
  border: 1px solid #f1f1f1;
  width: 1200px;
  margin: 50px auto;
}
table th {
  line-height: 52px;
  padding: 0 10px;
  font-size: 14px;
  font-weight: bold;
  background-color: #fafafa;
  border-bottom: 1px solid #f1f1f1;
}
table td {
  line-height: 32px;
  padding: 8px 10px;
  font-size: 13px;
  color: #666;
}
table td a {
  font-size: 14px;
  font-weight: 400;
  color: #5195d5;
}
table tr:nth-child(odd) {
  background-color: #fafafa;
}
table tr:hover {
  background-color: #f5faff;
}
</style>
</head>
<body>
<table>
    <tr><th align="right" width="200">标题</th><th align="left">路由</th></tr>
    <tr>
        <td align="right">首页</td>
        <td><a href="<?php echo base_url() ?>page/home" target="_blank"><?php echo base_url() ?>page/home</a></td>
    </tr>
    <tr>
        <td align="right">手机首页</td>
        <td><a href="<?php echo base_url() ?>/mobile/home" target="_blank"><?php echo base_url() ?>mobile/home</a></td>
    </tr>
    <tr>
        <td align="right">疫情</td>
        <td><a href="<?php echo base_url() ?>page/yiqing-index" target="_blank"><?php echo base_url() ?>page/yiqing-index</a></td>
    </tr>
    <tr>
        <td align="right">短期流量</td>
        <td><a href="<?php echo base_url() ?>page/liuliang-index" target="_blank"><?php echo base_url() ?>page/liuliang-index</a></td>
    </tr>
    <tr>
        <td align="right">短期流量结果页</td>
        <td><a href="<?php echo base_url() ?>page/liuliang-list" target="_blank"><?php echo base_url() ?>page/liuliang-list</a></td>
    </tr>
    <tr>
        <td align="right">词汇地图</td>
        <td><a href="<?php echo base_url() ?>page/liuliang-map" target="_blank"><?php echo base_url() ?>page/liuliang-map</a></td>
    </tr>

</table>
<table>
    <tr><th align="right" width="200">人搜网</th><th align="left">路由</th></tr>
    <tr>
        <td align="right">首页</td>
        <td><a href="<?php echo base_url() ?>page/ren-home" target="_blank"><?php echo base_url() ?>page/ren-home</a></td>
    </tr>
    <tr>
        <td align="right">历史人物</td>
        <td><a href="<?php echo base_url() ?>page/ren-a" target="_blank"><?php echo base_url() ?>page/ren-a</a></td>
    </tr>
    <tr>
        <td align="right">三国人物</td>
        <td><a href="<?php echo base_url() ?>page/ren-b" target="_blank"><?php echo base_url() ?>page/ren-b</a></td>
    </tr>
    <tr>
        <td align="right">人物详情</td>
        <td><a href="<?php echo base_url() ?>page/ren-c" target="_blank"><?php echo base_url() ?>page/ren-c</a></td>
    </tr>
    <tr>
        <td align="right">人物话题</td>
        <td><a href="<?php echo base_url() ?>page/ren-huati" target="_blank"><?php echo base_url() ?>page/ren-huati</a></td>
    </tr>
    <tr>
        <td align="right">人物详情页</td>
        <td><a href="<?php echo base_url() ?>page/ren-huati-page" target="_blank"><?php echo base_url() ?>page/ren-huati-page</a></td>
    </tr>
    <tr>
        <td align="right">标签页</td>
        <td><a href="<?php echo base_url() ?>page/ren-alltips" target="_blank"><?php echo base_url() ?>page/ren-alltips</a></td>
    </tr>
    <tr>
        <td align="right">标签页详情页</td>
        <td><a href="<?php echo base_url() ?>page/ren-alltips-page" target="_blank"><?php echo base_url() ?>page/ren-alltips-page</a></td>
    </tr>
</table>
</body>
</html>
