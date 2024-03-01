//演習②
public class Capsule {
	public static void main(String[] args){
		 Person taro = new Person("山田太郎",20);

		//青枠↓
		 System.out.println(taro.getName());


		//赤枠↓
		 taro.setName("花子");

		//青枠↓
		 System.out.println(taro.getName());

		//演習⑤get↓
		 System.out.println(taro.getAge());

		//演習⑤set↓
		 taro.setAge(30);
		//演習⑤年齢30
		 System.out.println(taro.getAge());
	}

}
