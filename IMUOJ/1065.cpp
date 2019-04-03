#include<iostream>
using namespace std;
int main()
{
	int a[100],n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	int sum = 0;
	for (int i = 0; i < n; i++)
	{
		if (a[i] % 2 == 0) sum += a[i];
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}