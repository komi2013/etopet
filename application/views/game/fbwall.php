<?php echo $_SERVER['HTTP_HOST'];
?>
    <div id='fb-root'></div>
    <script src='http://connect.facebook.net/en_US/all.js'></script>
    <p><a onclick='postToFeed(); return false;'>Post to Feed</a></p>
    <p id='msg'></p>

    <script> 
      FB.init({appId: "478243252250047", status: true, cookie: true});

      function postToFeed() {

        // calling the API ...
        var obj = {
          method: 'feed',
//           redirect_uri: 'https://mixi-etopet-stg.komahana.info/ja/main/',
          link: 'https://fb-etopet-stg.komahana.info/en/main/',
          picture: 'https://fb-etopet-stg.komahana.info/public/img/level/1.jpg',
          name: 'ETO pet',
//           caption: 'Reference Documentation',
          description: 'Stage Clear'
        };

        function callback(response) {
          document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        }

        FB.ui(obj, callback);
      }

    </script>

