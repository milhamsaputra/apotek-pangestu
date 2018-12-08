
</div>
</div>
<br>
<br>
<table width="100%"><tr><td>
</td></tr></table>
                <script>
                    $(function(){
                        $("#createFlatWindow").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                icon: '<i class="icon-user">',
                                title: 'Flat window',
                                content: '',
                                padding: 30,
                                onShow: function(_dialog){
                                    var content = '<form class="user-input" method="POST" action="<?php echo base_url()."Login/set_login" ?>" >' +
                                            '<label>Login</label>' +
                                            '<div class="input-control text"><input type="text" name="user"> </div>' +
                                            '<label>Password</label>'+
                                            '<div class="input-control password"><input type="password" name="pass"></div>'+
                                            '<div class="form-actions">' +
                                            '<button class="button primary" name="login">Login</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> '+
                                            '</div>'+
                                            '</form>';
                                    $.Dialog.title("User login");
                                    $.Dialog.content(content);
                                }
                            });
                        });
                    })
                </script>

</div>
<br>
<div id="footer2" >
    Created by 170102007
    &copy;Copyright 2018 Apotik Pangestu
</div>
</body>
</html>