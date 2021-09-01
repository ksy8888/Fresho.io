<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import="java.util.ArrayList"%>
<%
	request.setCharacterEncoding("UTF-8");
%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>계산</title>
</head>
<body>
<center>
<h2>계산</h2>
<h1>선택한 상품 목록</h1>
<hr>
<% 
	ArrayList list = (ArrayList)session.getAttribute("sub"); 
	String sub = request.getParameter("sub"); 
	list.add(sub);  
	session.setAttribute("sub",list); 
%>

<script type="text/javascript">
alert("<%= sub%>를(을) 추가 하셨습니다");
history.back();
</script>
</form>
</center>

</body>
</html>