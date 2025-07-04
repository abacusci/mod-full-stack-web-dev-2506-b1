<style>
td { 
  padding: 5px;   
  border: 1px solid gray;
}
tr:hover {
  background: blue;
  color: white;
}

</style>

<table>
  
<!-- table header -->
  <tr><th>Fullname</th>
  <th>Gender</th>
  <th>Birthdate</th></tr>

  <!-- table records -->
  <?php foreach($data as $item): ?>
  <tr><td><?php echo $item['full_name']; ?></td><td><?php echo $item['gender']; ?></td>
<td><?php echo $item['birth_date']; ?></td></tr>
  <?php endforeach; ?>
  <form method = "POST" action="?q=students/submit">
<tr>
  <td><input name="full_name"></td>
    
<td>
  <select name="gender">
    <option value="M">Male</option>
   <option value="F">Female</option>
  </select>
</td>

  <td><input name="birth_date" type="date"></td>
 <td><button type="submit" >add</td></td>
</tr>
</form>

</table>

