#include<iostream>
using namespace std;
void jg(int);
int main()
{
	int n;
	cin >> n;
	jg(n);
	//cin.get();
	//cin.get();
	return 0;
}
void jg(int x)
{
	if (x % 2 == 0)
	{
		cout << x << "/2=" << x / 2<<endl;
		if (x / 2 != 1)jg(x / 2);
	}
	if (x % 2 == 1)
	{
		cout << x << "*3+1=" << x * 3 + 1<<endl;
		if (x * 3 + 1 != 1)jg(x * 3 + 1);
	}
}
