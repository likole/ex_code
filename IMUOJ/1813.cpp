#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	int flag = 1;
	for (int i = 2; i < x; i++)
	{
		if (x%i == 0)flag = 0;
	}
	if (flag)cout << "YES";
	else cout << "NO";
	//cin.get();
	//cin.get();
	return 0;
}