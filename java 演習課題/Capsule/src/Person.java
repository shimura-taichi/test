//演習①
public class Person {
	 public String name = null;
	 private int age = 0;

	 public Person (String name,int age){
		 this.name=name;
		 this.age=age;
	 }

	 //青枠↓
	 public String getName(){
		 return this.name;
	 }
	 //演習⑤get↓
	 public int getAge(){
		 return this.age;
	 }

	//赤枠↓
	 public void setName(String name){
		 this.name=name;
	 }
	//演習⑤set↓
	 public void setAge(int age){
		 this.age=age;
	 }

}
