#include<iostream>
using namespace std;
int main()
{
	int n, data[100], m;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> data[i];
	}
	cin >> m;
	for (int i = n-m; i < n; i++)
	{
		cout << data[i] << " ";
	}
	for (int i = 0; i < n-m; i++)
	{
		cout << data[i] << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}