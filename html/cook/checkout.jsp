<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<%
    request.setCharacterEncoding("UTF-8"); 
%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>계산 화면 </title>
</head>
<body>
<center>
<table>
<tr>
<td></td>
<% 
if(session.getAttribute("productlist")==null)
%>
<font size="30">아무 것도 없습니다.</font>

<% 
else%>
 <%=session.getAttribute("productlist")%>
 <% 
 
%>
</td>
</tr>
</table>
 
<br>
<hr>
<input type="button" value="뒤로가기 " style="background-color:red " onclick="history.back();">
</center>
</body>
</html>