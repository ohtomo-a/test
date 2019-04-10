

import java.io.IOException;
import java.io.PrintWriter;


@WebServlet("/InquiryServlet")
public class InquiryServlet extends HttpServlet {

    public InquiryServlet() {
    	super();
    }

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws
	ServletException, IOException {
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html; charset=UTF-8");
		string name = request.getParameter("name");

			System.out.println(name);

			PrintWriter out=response.getWriter();
			out.println("<html><head></head><body><br>"+name+"さん、お問い合わせありがとうございました</body></html>");
	}


	}


