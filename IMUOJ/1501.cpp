#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	if (a > b)cout << a << "-" << b << "=" << a - b<<endl;
	else if (b > a) cout << b << "-" << a << "=" << b - a << endl;
	else cout << a << "=" << b << endl;
	//cin.get();
	//cin.get();
	return 0;
}