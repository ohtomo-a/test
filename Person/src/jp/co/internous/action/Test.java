package jp.co.internous.action;

public class Test {
	public static void main(String[]args){
		Person taro=new Person();
		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber="090-0000-0000";
		taro.address="abc.co.jp";

		Person jiro=new Person();
		jiro.name="木村次郎";
		jiro.age=18;
		jiro.phoneNumber="090-1111-0000";
		jiro.address="def.co.jp";

		Person hanako=new Person();
		hanako.name="鈴木花子";
		hanako.age=16;
		hanako.phoneNumber="090-1111-1111";
		hanako.address="ghi.co.jp";

		Person aya=new Person();
		aya.name="大伴彩音";
		aya.age=20;
		aya.phoneNumber="090-1111-2222";
		aya.address="jkl.co.jp";

	System.out.println(taro.name);
	System.out.println(taro.age);
	System.out.println(taro.phoneNumber);
	System.out.println(taro.address);

	System.out.println(jiro.name);
	System.out.println(jiro.age);
	System.out.println(jiro.phoneNumber);
	System.out.println(jiro.address);

	System.out.println(hanako.name);
	System.out.println(hanako.age);
	System.out.println(hanako.phoneNumber);
	System.out.println(hanako.address);

	System.out.println(aya.name);
	System.out.println(aya.age);
	System.out.println(aya.phoneNumber);
	System.out.println(aya.address);

	taro.talk();
	taro.walk();
	taro.run();

	Robot aibo=new Robot();
	aibo.name="aibo";

	Robot asimo=new Robot();
	asimo.name="asimo";

	Robot pepper=new Robot();
	pepper.name="pepper";

	aibo.talk();
	aibo.walk();
	aibo.run();

	asimo.talk();
	asimo.walk();
	asimo.run();

	pepper.talk();
	pepper.walk();
	pepper.run();

	}

}
