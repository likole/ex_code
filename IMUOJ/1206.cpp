#include<iostream>
using namespace std;
int main()
{
	int t, a, b;
	cin >> t;
	for (int i = 0; i < t; i++)
	{
		cin >> a >> b;
		cout << (((a % 100) + (b % 100)) % 100) << endl;
	}
	//cin.get();
	//cin.get();
}