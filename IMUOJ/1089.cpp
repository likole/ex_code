#include<iostream>
using namespace std;
int main()
{
	int n,sum=0;
	int num[10];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> num[i];
		if (num[i] % 2 == 0) sum += num[i];
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}
