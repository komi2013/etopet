<?php 

?>
<script type="text/javascript" charset="UTF-8" src="https://static.mixi.jp/js/application/connect.js"></script>
<div>
  <p>ETO pet</p>
  <p>给宠物喂。在创建测验或正确的答案 </p>
</div>

<script type="text/javascript">
mixi.init({
    appId:    "mixiapp-web_39856",
    relayUrl: "https://etopet-stg.komahana.info/zh/home/"
});
var u = location.href, h = u.substr(u.indexOf('#') + 1).split('&'), t, r;
try {
  t = h[0] === '..' ? parent.parent : parent.frames[h[0]];
  r = t.gadgets.rpc.receive;
} catch (e) {
}
r && r(h);

mixi.auth({
    scope: "mixi_apps2 r_profile r_voice w_voice",
    state: "5c1b3eea390b53f54ad0975e9a4bbba2"
});

</script>

<style type="text/css">

</style>
