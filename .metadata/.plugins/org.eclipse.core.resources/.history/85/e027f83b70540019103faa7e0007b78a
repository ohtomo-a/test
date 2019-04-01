public class ChkLoadJdbc{
	public static void main(String[] args)throws InstantiationException,
	IllegalAccessException{
		string msg="";
		try{
			class.forName("com.mysql.jdbc.Driver").newInstance();
			msg="ドライバーのロードに成功しました";
		}catch(ClassNotFoundException e){
			msg="ドライバーのロードに失敗しました";
		}
		System.out.println(msg);
	}
}