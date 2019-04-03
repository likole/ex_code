#include<iostream>
using namespace std;
class A
{
	int a;
public:
	A() { cin >> a; }
	void show() 
	{
		cout << a<<endl;
	}//用于输出a
};
class B :public A
{
	int b;
public:
	B() { cin >> b; }
	void show() 
	{
		A::show();
		cout << b<<endl;
	}//输出a和b，其中输出a需调用A类的show函数完成，因为a是不可见的
};
int main()
{
	B b1;
	b1.show();
}