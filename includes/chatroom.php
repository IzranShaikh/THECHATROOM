<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<div style="">
    <!--ChatRoom-->
    <div class="chatroom" id="chatroom">
        <div class="chatroomtitle" id="chatroomtitle">
        <!--ChatRoom Head-->
            <center><i class="material-icons">chat_bubble_outline</i>
            <b class="titletext">Online ChatRoom</b></center>
        </div>
        <div id="chatboxcontainer" style="height:500px;overflow:auto;">
            <div class="chatbox" id="chatbox">
            <!--ChatBox-->
                <script>
                    $('#chatbox').load("Process/display_data.php");
                </script>
            </div>
        </div>
        <div class="chatroominput col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <br>
            <div action="" class="input-group">
                <?php
                if(isset($_SESSION['username_ss']))
                {
                ?>
                <input type="text" id="msg" placeholder="Type your message here.." class="form-control">
                <button class="btn btn-info" onclick="sendmsg();" id="sendbutton">Send</button>
                <?php
                }
                else
                {
                    echo "<pre style='color:red;'>Please Login or SignUp to join the conversation</pre>";
                }
                ?>
            </div>
            <br>
        </div>
    </div>
    
</div>
</div>