#include<iostream>
using namespace std;
int main()
{
	int x,a,b,c;
	cin >> x;
	a = x / 100;
	b = (x / 10) % 10;
	c = x % 10;
	if (x == a*a*a + b*b*b + c*c*c)
		cout << "1\n";
	else cout << "0\n";
	//cin.get();
	//cin.get();
	return 0;
}