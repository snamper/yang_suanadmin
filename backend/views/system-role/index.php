

<?php
use yii\widgets\LinkPager;
use yii\base\Object;
use backend\models\SystemModule;
use yii\bootstrap\ActiveForm;
use backend\models\SystemRole;

$modelLabel = new \backend\models\SystemRole();
?>

<div class="row">

	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2>
					<i class="glyphicon glyphicon-user"></i>用户组
				</h2>
				<div class="box-icon">
					<button id="create_btn" type="button"
						class="btn btn-xs btn-primary">添&nbsp;&emsp;加</button>
					|
					<button id="delete_btn" type="button" class="btn btn-xs btn-danger">批量删除</button>
				
				</div>
			</div>
			<div class="box-content">
			    <div id="msg_info">
                </div>
				<table id="data_table"
					class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<tr>
						
						<?php
						      echo '<th><label><input id="data_table_check" type="checkbox"></label></th>';
						      
						      
						      echo '<th>' . $modelLabel->getAttributeLabel('id'). '</th>';
						      
						      
						      echo '<th>' . $modelLabel->getAttributeLabel('code'). '</th>';
						      
						      
						      echo '<th>' . $modelLabel->getAttributeLabel('name'). '</th>';
						      
						      
						      echo '<th>' . $modelLabel->getAttributeLabel('des'). '</th>';
						      
						      
// 						      echo '<th>' . $modelLabel->getAttributeLabel('create_user'). '</th>';
						      
						      
// 						      echo '<th>' . $modelLabel->getAttributeLabel('create_date'). '</th>';
						      
						      
						      echo '<th>' . $modelLabel->getAttributeLabel('update_user'). '</th>';
						      
						      
						      echo '<th>' . $modelLabel->getAttributeLabel('update_date'). '</th>';
						      
						      
						      ?>
						      <th>操作</th>

						</tr>
					</thead>
					<tbody>
					
		<?php
foreach ($models as $model) {
    echo '<tr id="rowid_' . $model->id . '">';
    echo '  <td><label><input type="checkbox" value="' . $model->id . '"></label></td>';
        echo '  <td>' . $model->id . '</td>';
        echo '  <td>' . $model->code . '</td>';
        echo '  <td>' . $model->name . '</td>';
        echo '  <td>' . $model->des . '</td>';
//         echo '  <td>' . $model->create_user . '</td>';
//         echo '  <td>' . $model->create_date . '</td>';
        echo '  <td>' . $model->update_user . '</td>';
        echo '  <td>' . $model->update_date . '</td>';
       
    echo '  <td class="center">';
    echo '      <a id="user_btn" class="btn btn-success btn-sm" href="index.php?r=system-user-role/index&roleId='.$model->id.'"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>分配用户</a>';
    echo '      <a id="right_btn" onclick="rightAction('.$model->id.')" class="btn btn-success btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>分配权限</a>';
    echo '      <a id="view_btn" onclick="viewAction(' . $model->id . ')" class="btn btn-success btn-sm" href="#"> <i class="glyphicon glyphicon-zoom-in icon-white"></i>查看</a>';
    echo '      <a id="edit_btn" onclick="editAction(' . $model->id . ')" class="btn btn-info btn-sm" href="#"> <i class="glyphicon glyphicon-edit icon-white"></i>修改</a>';
    echo '      <a id="delete_btn" onclick="deleteAction(' . $model->id . ')" class="btn btn-danger btn-sm" href="#"> <i class="glyphicon glyphicon-trash icon-white"></i>删除</a>';
    echo '  </td>';
    echo '<tr/>';
}

?>
				
					</tbody>
				</table>
				
				<?= LinkPager::widget(["pagination" => $pages]); ?>				
			</div>
		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->



<div class="modal fade" id="edit_dialog" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
                <?php $form = ActiveForm::begin(["id" => "system-role-form", "class"=>"form-horizontal", "action"=>"index.php?r=system-role/save"]); ?>                
                <input type="hidden" class="form-control" id="id" name="SystemRole[id]" >
                                    
                    <div id="code_div" class="form-group">
    					<label for="code" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("code")?></label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" id="code"
    							name="SystemRole[code]" placeholder="必填">
    					</div>
    					<div class="clearfix"></div>
    				</div>
                                    
                    <div id="name_div" class="form-group">
    					<label for="name" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("name")?></label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" id="name"
    							name="SystemRole[name]" placeholder="必填">
    					</div>
    					<div class="clearfix"></div>
    				</div>
                                    
                    <div id="des_div" class="form-group">
    					<label for="des" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("des")?></label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" id="des"
    							name="SystemRole[des]" placeholder="">
    					</div>
    					<div class="clearfix"></div>
    				</div>
                                    
                    <div id="create_user_div" class="form-group">
    					<label for="create_user" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("create_user")?></label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" id="create_user"
    							name="SystemRole[create_user]" placeholder="">
    					</div>
    					<div class="clearfix"></div>
    				</div>
                                    
                    <div id="create_date_div" class="form-group">
    					<label for="create_date" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("create_date")?></label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" id="create_date"
    							name="SystemRole[create_date]" placeholder="">
    					</div>
    					<div class="clearfix"></div>
    				</div>
                                    
                    <div id="update_user_div" class="form-group">
    					<label for="update_user" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("update_user")?></label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" id="update_user"
    							name="SystemRole[update_user]" placeholder="">
    					</div>
    					<div class="clearfix"></div>
    				</div>
                                    
                    <div id="update_date_div" class="form-group">
    					<label for="update_date" class="col-sm-2 control-label"><?php echo $modelLabel->getAttributeLabel("update_date")?></label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" id="update_date"
    							name="SystemRole[update_date]" placeholder="">
    					</div>
    					<div class="clearfix"></div>
    				</div>
                			<?php ActiveForm::end(); ?>            </div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">关闭</a> <a
					id="edit_dialog_ok" href="#" class="btn btn-primary">确定</a>
			</div>
		</div>
	</div>
</div>


<!-- 分配权限 -->
<div class="modal fade" id="tree_dialog" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
			     <input type="hidden" id="select_role_id" />
                <?php $form = ActiveForm::begin(["id" => "system-role-form", "class"=>"form-horizontal", "action"=>"index.php?r=system-role/save"]); ?>                
               <div id="treeview"/>
                <?php ActiveForm::end(); ?>            
            </div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">关闭</a> <a
					id="right_dialog_ok" href="#" class="btn btn-primary">确定</a>
			</div>
		</div>
	</div>
</div>
<!-- 分配权限结束 -->

<script>
$(function(){
	// 树节点 http://www.htmleaf.com/jQuery/Menu-Navigation/201502141379.html
	$('#user_btn').click(function(){
		$('#tree_dialog').modal('show');
	});

	$('#right_btn').click(function(){
		
	});
});




function changeCheckState(node, checked){
	if(!!node.nodes == true){
		var nodes = node.nodes;
		for(var i = 0; i < nodes.length; i++){
			var node1 = nodes[i];
			if(checked == true){
				$('#treeview').treeview('checkNode', [ node1.nodeId, { silent: true } ]);
			}
			else{
				$('#treeview').treeview('uncheckNode', [ node1.nodeId, { silent: true } ]);
			}
			changeCheckState(node1, checked);
		}
	}
}

function rightAction(roleId){
	$('#select_role_id').val(roleId);
	$.ajax({
		   type: "GET",
		   url: "index.php?r=system-role/get-all-rights",
		   data: {'roleId':roleId},
		   cache: false,
		   dataType:"json",
		   error: function (xmlHttpRequest, textStatus, errorThrown) {
			    alert("出错了，" + textStatus);
			},
		   success: function(data){
			   //console.log(data);
				$('#treeview').treeview({
					data:data,
					showIcon: false,
			        showCheckbox: true,
			        onNodeChecked: function(event, node) {
			          //console.log('======',node);
			          changeCheckState(node, true);
			        },
			        onNodeUnchecked: function (event, node) {
			        	changeCheckState(node, false);
			        }
					});
		   }
		});
	$('#tree_dialog').modal('show');
}

$('#right_dialog_ok').click(function(){
	var role_id = $('#select_role_id').val();
	var checkNodes = $('#treeview').treeview('getChecked');
	if(checkNodes.length > 0){
		var rids = [];
		for(i = 0; i < checkNodes.length; i++){
			var node = checkNodes[i];
			if(node.type == 'r'){
				rids.push(node.rid);
			}
		}
		$.ajax({
			   type: "GET",
			   url: "index.php?r=system-role/save-rights",
			   data: {"rids":rids, 'roleId':role_id},
			   cache: false,
			   dataType:"json",
			   error: function (xmlHttpRequest, textStatus, errorThrown) {
				    alert("出错了，" + textStatus);
				},
			   success: function(data){
				   if(data.errno == 0){
					   admin_tool.alert('msg_info', '保存成功', 'success');
				   }
				   else{
					   admin_tool.alert('msg_info', '保存失败', 'error');
				   }
				   $('#tree_dialog').modal('hide');
//	 			   console.log(msg);
				   //initEditSystemModule(data, type);
			   }
			});
// 		console.log('====',rids);
	}
});



function viewAction(id){
	initModel(id, 'view', 'fun');
}

function initEditSystemModule(data, type){
	if(type == 'create'){
				$("#id").val('');
				$("#code").val('');
				$("#name").val('');
				$("#des").val('');
				$("#create_user").val('');
				$("#create_date").val('');
				$("#update_user").val('');
				$("#update_date").val('');
			}
	else{
				$("#id").val(data.id);
	    		$("#code").val(data.code);
	    		$("#name").val(data.name);
	    		$("#des").val(data.des);
	    		$("#create_user").val(data.create_user);
	    		$("#create_date").val(data.create_date);
	    		$("#update_user").val(data.update_user);
	    		$("#update_date").val(data.update_date);
	    	}
	if(type == "view"){
				$("#id").attr({readonly:true,disabled:true});
        		$("#code").attr({readonly:true,disabled:true});
        		$("#name").attr({readonly:true,disabled:true});
        		$("#des").attr({readonly:true,disabled:true});
        		$("#create_user").attr({readonly:true,disabled:true});
        		$("#create_date").attr({readonly:true,disabled:true});
        		$("#update_user").attr({readonly:true,disabled:true});
        		$("#update_date").attr({readonly:true,disabled:true});
        		$('#edit_dialog_ok').addClass('hidden');
	}
	else{
				$("#id").attr({readonly:false,disabled:false});
        		$("#code").attr({readonly:false,disabled:false});
        		$("#name").attr({readonly:false,disabled:false});
        		$("#des").attr({readonly:false,disabled:false});
        		$("#create_user").attr({readonly:false,disabled:false});
        		$("#create_user").parent().parent().hide();
        		$("#create_date").attr({readonly:false,disabled:false});
        		$("#create_date").parent().parent().hide();
        		$("#update_user").attr({readonly:false,disabled:false});
        		$("#update_user").parent().parent().hide();
        		$("#update_date").attr({readonly:false,disabled:false});
        		$("#update_date").parent().parent().hide();
        		$('#edit_dialog_ok').removeClass('hidden');
	}
	$('#edit_dialog').modal('show');
}


function addAction(id){
	
}
function initModel(id, type, fun){
	
	$.ajax({
		   type: "GET",
		   url: "index.php?r=system-role/view",
		   data: {"id":id},
		   cache: false,
		   dataType:"json",
		   error: function (xmlHttpRequest, textStatus, errorThrown) {
			    alert("出错了，" + textStatus);
			},
		   success: function(data){
// 			   console.log(msg);
			   initEditSystemModule(data, type);
		   }
		});
}
function editAction(id){
	initModel(id, 'edit');
}

function deleteAction(id){
	var ids = [];
	if(!!id == true){
		ids[0] = id;
	}
	else{
		var checkboxs = $('#data_table :checked');
	    if(checkboxs.size() > 0){
	        var c = 0;
	        for(i = 0; i < checkboxs.size(); i++){
	            var id = checkboxs.eq(i).val();
	            if(id != ""){
	            	ids[c++] = id;
	            }
	        }
	    }
	}
	if(ids.length > 0){
		admin_tool.confirm('请确认是否删除', function(){
			console.log(this);
			///var csrf = $('meta[name="csrf-token"]').attr("content"); // "_csrf":csrf
		    $.ajax({
				   type: "GET",
				   url: "index.php?r=system-role/delete",
				   data: {"ids":ids},
				   cache: false,
				   dataType:"json",
				   error: function (xmlHttpRequest, textStatus, errorThrown) {
					    alert("出错了，" + textStatus);
					},
				   success: function(data){
					   for(i = 0; i < ids.length; i++){
						   $('#rowid_' + ids[i]).remove();
					   }
					   admin_tool.alert('msg_info', '删除成功', 'success');
					   window.location.reload();
				   }
				});
		});
	}
	else{
		admin_tool.alert('msg_info', '请先选择要删除的数据', 'warning');
	}
    
}
function getSelectedIdValues(formId)
{
	var value="";
	$( formId + " :checked").each(function(i)
	{
		if(!this.checked)
		{
			return true;
		}
		value += this.value;
		if(i != $("input[name='id']").size()-1)
		{
			value += ",";
		}
	 });
	return value;
}
$('#edit_dialog_ok').click(function (e) {
    e.preventDefault();
	$('#system-role-form').submit();
});
$('#create_btn').click(function (e) {
    e.preventDefault();
    initEditSystemModule({}, 'create');
});
$('#delete_btn').click(function (e) {
    e.preventDefault();
    deleteAction('');
});

$('#system-role-form').bind('submit', function(e) {
	e.preventDefault();
	var id = $("#id").val();
	var action = id == "" ? "create" : "update&id=" + id;
    $(this).ajaxSubmit({
    	type: "post",
    	dataType:"json",
    	url: "index.php?r=system-role/" + action,
    	success: function(value) 
    	{
    		//console.log(value);
        	if(value.errno == 0){
        		$('#edit_dialog').modal('hide');
        		admin_tool.alert('msg_info', '添加成功', 'success');
        		window.location.reload();
        	}
        	else{
            	var json = value.data;
        		for(var key in json){
        			console.log(key+':'+json[key]);
        			$('#' + key).attr({'data-placement':'bottom', 'data-content':json[key], 'data-toggle':'popover'}).addClass('popover-show').popover('show');
        			
        		}
        	}

    	}
    });
});

</script>


