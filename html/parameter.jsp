@WebServlet("/cart")
public class Cart extends HttpServlet{
	protexted void service(HttpServletRequest request, HttpServlet)
	
		Cookie[] cookies = request.getCookies();
		String commit = (String) request.getParameter("commit");
		String cart = "";
		
		if(cookies != null) {
			for(Cookie c : cookies){
				if(c.getName().equals("cart")){
					cart = c.getValue();
					break;
				}
			}
		}
	
	
	if(commit != null){
		PrintWriter out = response.getWriter();
		out.println(cart);
	}else{
		String product = request.getParameter("product");
		cart += product + "/";
		Cookie cartCookie = new Cookie("cart",cart);
		response.addCookie(cartCookie);
		resposne.sendRedirect("cookie.html")
	}
	
}