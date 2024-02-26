
public class Test {
	public static void main(String[]args){

		//演習①
		Person taro=new Person();

		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber="080-1111-1111";
		taro.address="yamadataro.co.jp";


		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);

		taro.talk();
		taro.walk();
		taro.run();

		//演習②③④
		Person ziro=new Person();

		ziro.name="木村次郎";
		ziro.age=18;
		ziro.phoneNumber="080-2222-2222";
		ziro.address="kimura.ziro.co.jp";

		System.out.println(ziro.name);
		System.out.println(ziro.age);
		System.out.println(ziro.phoneNumber);
		System.out.println(ziro.address);

		ziro.talk();
		ziro.walk();
		ziro.run();

		Person suzuki=new Person();

		suzuki.name="鈴木花子";
		suzuki.age=16;
		suzuki.phoneNumber="080-3333-3333";
		suzuki.address="suzukihanako.co.jp";

		System.out.println(suzuki.name);
		System.out.println(suzuki.age);
		System.out.println(suzuki.phoneNumber);
		System.out.println(suzuki.address);

		suzuki.talk();
		suzuki.walk();
		suzuki.run();

		Person shimura=new Person();

		shimura.name="志村太一";
		shimura.age=29;
		shimura.phoneNumber="080-4444-4444";
		shimura.address="shimurataichi.co.jp";

		System.out.println(shimura.name);
		System.out.println(shimura.age);
		System.out.println(shimura.phoneNumber);
		System.out.println(shimura.address);

		shimura.talk();
		shimura.walk();
		shimura.run();


	}

}
