#include<iostream>
using namespace std;
class complex
{
public:
	double a;
	complex(double m = 0){a = m;}
	operator double() { return a; }
	complex operator ++(){return ++a;}
};
int main()
{
	complex c1; //构造函数被调用
	double d1;
	cin >> d1;
	c1 = d1;  //构造函数被调用
	++c1; //operator++函数被调用
	d1 = c1; //operator double函数被调用
	cout << d1;
}