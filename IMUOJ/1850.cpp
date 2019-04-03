#include<iostream>
using namespace std;
class A
{
	int a;
public:
	A(int m) { a = m; }
	void show() { cout << a << endl; }
};
class B :public A
{
	int b;
public:
	B(int m, int n):A(m)
	{
		b = n;
	}
		void show() 
		{
			A::show();
			cout << b << endl;
		}
};
int main()
{
	int x, y;
	cin >> x >> y;
	B b1(x, y);
	b1.show();
}