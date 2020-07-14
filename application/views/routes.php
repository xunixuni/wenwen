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
        <td><a href="<?php echo base_url() ?>page/index" target="_blank"><?php echo base_url() ?>page/index</a></td>
    </tr>
    <tr>
        <td align="right">图文列表</td>
        <td><a href="<?php echo base_url() ?>page/list" target="_blank"><?php echo base_url() ?>page/list</a></td>
    </tr>
    <tr>
        <td align="right">试管婴儿医院</td>
        <td><a href="<?php echo base_url() ?>page/shiguan" target="_blank"><?php echo base_url() ?>page/shiguan</a></td>
    </tr>
    <tr>
        <td align="right">国内试管婴儿医院</td>
        <td><a href="<?php echo base_url() ?>page/shiguan-more" target="_blank"><?php echo base_url() ?>page/shiguan-more</a></td>
    </tr>
    <tr>
        <td align="right">试管婴儿医院详情</td>
        <td><a href="<?php echo base_url() ?>page/shiguan-page" target="_blank"><?php echo base_url() ?>page/shiguan-page</a></td>
    </tr>
    <tr>
        <td align="right">问答</td>
        <td><a href="<?php echo base_url() ?>page/wenda" target="_blank"><?php echo base_url() ?>page/wenda</a></td>
    </tr>
    <tr>
        <td align="right">问答详情</td>
        <td><a href="<?php echo base_url() ?>page/wenda-page" target="_blank"><?php echo base_url() ?>page/wenda-page</a></td>
    </tr>
    <tr>
        <td align="right">搜索结果</td>
        <td><a href="<?php echo base_url() ?>page/results" target="_blank"><?php echo base_url() ?>page/results</a></td>
    </tr>
</table>
</body>
</html>
