#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	double sb[8];
	for (int i = 0; i < n; i++)
	{
		for (int i = 0; i < 8; i++)
		{
			cin >> sb[i];
		}
		for (int i = 0; i < 4; i++)
		{
			cout << (int)sb[i] / 36;
		}
		cout << ".";
		for (int i = 4; i < 8; i++)
		{
			cout << (int)sb[i] / 36;
		}
		cout << endl;
	}
}