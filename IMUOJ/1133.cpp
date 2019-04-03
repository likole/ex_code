#include<iostream>
int f(int);
using namespace std;
int main()
{
	int x;
	cin >> x;
	cout << f(x) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int f(int x)
{
	int ans;
	if (x == 1)ans = 10;
	else if (x > 1) ans = f(x - 1) + 2;
	return ans;
}