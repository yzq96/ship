<?php
/* Smarty version 3.1.30, created on 2017-06-23 09:53:58
  from "C:\PHP\htdocs\Ship\templates\userManager.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594c74b6a28ce0_52547319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd32e326634e170e7e3af4e3a9c9f41f470017183' => 
    array (
      0 => 'C:\\PHP\\htdocs\\Ship\\templates\\userManager.tpl',
      1 => 1497498117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:bottom.tpl' => 1,
  ),
),false)) {
function content_594c74b6a28ce0_52547319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    p div {
        margin: 1rem 0 0 3rem;
    }

    #RoleId {
        height: 2rem;
    }

    div.notibar ul li span {
        display: inline-block;
        width: 6rem;
        text-align: right;
        box-sizing: border-box;
        padding-right: .4rem;
    }

    .two_third {
        width: 100%;
    }

    .stdtable thead th.center, td.center {
        text-align: center;
    }

    h5 {
        margin: 10px 10px 10px 55px
    }

    td {
        font-size: 1.2em;
    }

    a:hover {
        color: red;
    }

    #cancel {
        width: 4rem;
        margin: 0;
        font-weight: bold;
        color: #eee;
        background: #FB9337;
        border: 1px solid #F0882C;
        padding: 7px 10px;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        cursor: pointer;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;

    }

    ul input.required {
        border: solid 1px #f00;
    }

    div.notibar ul li span.error {
        color: red;
        width: auto;
    }
span.error{
    visibility: hidden;
}
</style>
<div class="centercontent">
    <div id="contentwrapper" class="contentwrapper">
        <div id="updates" class="subcontent">
            <div class="notibar announcement">
                <a class="close"></a>
                <h3>?????????????????????</h3>
                <h5>???????????????????????????????????????123456</h5>
                <form method="post">
                    <ul>
                        <li>
                            <p>
                                <span>?????????: </span><input style="position: relative" id="LoginId" name="LoginId"
                                                         type="text" placeholder="??????????????????"
                                                         autocomplete="off"><span class="error"
                                                                                  style="display:inline-block; text-align: left">?????????????????????</span>
                            </p></li>
                        <li>
                            <p>
                                <span>??????:</span><input style="position: relative" id="Name" name="Name" type="text"
                                                       placeholder="???????????????"
                                                       autocomplete="off"><span class="error"
                                                                                style="display: inline-block; text-align: left ">??????????????????</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span>????????????:</span><input style="position: relative" id="Tel" name="Tel" type="text"
                                                         placeholder="??????????????????"
                                                         autocomplete="off"><span class="error"
                                                                                  style="display: inline-block; text-align: left ">??????????????????</span>
                            </p>
                        </li>
                        <li>
                            <input type="hidden" name="Id" id="Id">
                            <p>
                                <input id="btn" type="submit" value="??????"/>
                                <input id="cancel" type="button" value="??????"/>
                            </p>
                        </li>
                    </ul>
                </form>
            </div><!-- notification announcement -->

            <div class="two_third ">
                <div class="contenttitle2 nomargintop">
                    <h3>????????????</h3>
                </div><!--contenttitle-->


                <br clear="all"/>
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablecb overviewtable2">
                    <thead>
                    <tr>
                        <th class="center">??????</th>
                        <th class="center">?????????</th>
                        <th class="center">??????</th>
                        <th class="center">????????????</th>
                        <th class="center">??????</th>
                        <th class="center"></th>
                    </tr>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                        <tr>
                            <td class="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['Id'];?>
</td>
                            <td class="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['LoginId'];?>
</td>
                            <td class="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['Name'];?>
</td>
                            <td class="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['Tel'];?>
</td>
                            <td class="center" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['RoleId'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['RoleName'];?>
</td>
                            <td class="center"><a class="edit" style="cursor: pointer" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Id'];?>
">??????</a>
                                <a class="del" style="cursor: pointer" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Id'];?>
">??????</a>
                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
            </div><!--two_third dashboard_left -->
        </div><!-- #updates -->
    </div><!--contentwrapper-->
    <br clear="all"/>
</div><!-- centercontent -->
<!-- ????????????Modal??? -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    ????????????
                </h4>
            </div>
            <div class="modal-body">
                ??????????????????
            </div>
            <div class="modal-footer">
                <button type="button" onclick="javascript:history.go(-1);" class="btn btn-default" data-dismiss="modal">
                    ??????
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
//        $('.error').hide();
        $('.edit').click(function () {
            var id = $(this).attr('value');
            $('#Id').val(id);
            var tr = $(this).closest('tr');
            var name = tr.find('td:eq(2)').text();
            $("#Name").val(name);
            var tel = tr.find('td:eq(3)').text();
            $("#Tel").val(tel);
            var rid = tr.find('td:eq(4)').attr('value');
            $('#RoleId').val([rid]);
            var lid = tr.find('td:eq(1)').text();
            $("#LoginId").val(lid);
            $("#LoginId").attr('disabled', 'disabled')
            $('ul input').removeClass('required');
            $('span.error').css('visibility','hidden');
        })
        $('#cancel').click(function () {
            $('#RoleId').val([1]);
            $("#Name").val('');
            $("#Tel").val('');
            $("#LoginId").val('');
            $("#LoginId").removeAttr('disabled');
            $('ul input').removeClass('required');
            $('span.error').css('visibility','hidden');
        })
        //??????
        var id,tr;
        $(".del").click(function () {
            id = $(this).attr('value');
            tr = $(this).closest('tr');
            $('.modal-body').text('????????????????????????');
            $('.modal-footer').html(' <button type="button" class="btn btn-default" data-dismiss="modal">' +
                '??????</button><button type="button" id="sub" class="btn btn-primary">??????</button>');
            $('#myModal').modal('show');
        })
        //????????????
        $('.modal-footer').on('click', '#sub', function () {
            $('ul input').removeClass('required');
            $('span.error').hide();
            $.ajax({
                url: 'deleteUser.php',
                type: 'post',
                data: {
                    id: id
                },
                success: function (data) {
                    if (data == 1) {
                        tr.remove();
                        $('#cancel').click();
                        $('#myModal').modal('hide')
                    }
                }
            })
        })
        function resetFields() {
            $("input[type=text], input[type=password]").removeClass("required");
        }
        $('input[type=text]:not(input[id=Tel])').keyup(function () {
            $(this).removeClass("required").next('span').hide();
        })
        $('input[id=Tel]').change(function () {
            if (/^1[34578]\d{9}$/.test($('#Tel').val())) {
                $(this).removeClass("required").next('span').hide();
            }
        })
        $("form").submit(function () {
            var bol = true;
            if ($('#LoginId').val() == '') {
                $('#LoginId').animate({left: "-10px"}, 100).animate({left: "+10px"}, 100)
                    .animate({left: "-10px"}, 100).animate({left: "+10px"}, 100)
                    .animate({left: "0px"}, 100).addClass("required");
                $('#LoginId').next('span').css('visibility','visible');
                bol = false;
            }
            if ($('#Name').val() == '') {
                $('#Name').animate({left: "-10px"}, 100).animate({left: "10px"}, 100)
                    .animate({left: "-10px"}, 100).animate({left: "10px"}, 100)
                    .animate({left: "0px"}, 100).addClass("required");
                $('#Name').next('span').css('visibility','visible');
                bol = false;
            }
            if (!(/^1[34578]\d{9}$/.test($('#Tel').val()))) {
                $('#Tel').animate({left: "-10px"}, 100).animate({left: "10px"}, 100)
                    .animate({left: "-10px"}, 100).animate({left: "10px"}, 100)
                    .animate({left: "0px"}, 100).addClass("required");
                $('#Tel').next('span').css('visibility','visible');
                bol = false;
            }
            if (!bol) {
                return false;
            }
        })

    <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
