function changeStatus(){
      a = document.getElementById('update status').value;
      var field1 = "<!-- Form --><div class='row'><form class='col s12' action='admin.php' method='post'><!-- Member ID --><div class='row'><div class='input-field col s6'><input name='member_id' id='mem_id' type='number' size='10' required><label class='active'  for='first_name'>Member ID</label></div></div></form></div>";
      var field2 = "<!-- Form --><div class='row'><form class='col s12' action='admin.php' method='post'><!-- Property ID --><div class='row'><div class='input-field col s6'><input name='property_id' id='prop_id' type='number' size='10' required><label class='active'  for='first_name'>Property ID</label></div></div></form></div>";
      if (a==1){
        document.getElementById("update status").innerHTML = field1;
      }
      else if (a==2){
        document.getElementById("update status").innerHTML = field2;
      }
  
}
