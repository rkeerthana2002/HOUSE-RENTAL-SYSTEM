var selectedRow = null;
function onFormSubmit(e){
event.preventDefault();
var formData = readFormData();
if(selectedRow === null){
insertNewRecord(formData);
}else{
updateRecord(formData)
}
resetForm();
}
// Read operation using this function
function readFormData(){
var formData = {};
formData["Name"] = document.getElementById("Name").value;
formData["password"] = document.getElementById("password").value;
formData["emailid"] = document.getElementById("emailid").value;
formData["phonenumber"] = document.getElementById("phonenumber").value;
return formData;
}
// Create operation
function insertNewRecord(data){
var table = document.getElementById("playerlist").getElementsByTagName('tbody')[0];
var newRow = table.insertRow(table.length);
var cell1 = newRow.insertCell(0);
cell1.innerHTML = data.Name;
var cell2 = newRow.insertCell(1);
cell2.innerHTML = data.password;
var cell3 = newRow.insertCell(2);
cell3.innerHTML = data.emailid;
var cell4 = newRow.insertCell(3);
cell4.innerHTML = data.phonenumber;
var cell5 = newRow.insertCell(4);
cell5.innerHTML = `<a href="#" onClick='onEdit(this)'>Edit</a>
<a href="#" onClick='onDelete(this)'>Delete</a>`;
}
// To Reset the data of fill input
function resetForm(){
document.getElementById('Name').value = '';
document.getElementById('password').value = '';
document.getElementById('emailid').value = '';
document.getElementById('phonenumber').value = '';
selectedRow = null;
}
// For Edit operation
function onEdit(td){
selectedRow = td.parentElement.parentElement;
document.getElementById('Name').value = selectedRow.cells[0].innerHTML;
document.getElementById('password').value = selectedRow.cells[1].innerHTML;
document.getElementById('emailid').value = selectedRow.cells[2].innerHTML;
document.getElementById('phonenumber').value = selectedRow.cells[3].innerHTML;
}
function updateRecord(formData){
selectedRow.cells[0].innerHTML = formData.Name;
selectedRow.cells[1].innerHTML = formData.password;
selectedRow.cells[2].innerHTML = formData.emailid;
selectedRow.cells[3].innerHTML = formData.phonenumber;
}
function onDelete(td){
if(confirm('Are you sure you want to delete this record?')){
row = td.parentElement.parentElement;
document.getElementById('playerlist').deleteRow(row.rowIndex);
resetForm();
}
}
