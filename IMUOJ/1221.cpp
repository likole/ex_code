#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	int count = 0;
	for (int i = 1; i <= n; i++)
	{
		if (i % 7 == 0 || (i % 10000) / 1000 == 7 || (i % 1000) / 100 == 7 || (i % 100) / 10 == 7 || (i % 10) == 7) count++;
	}
	cout << count << endl;
	//cin.get();
	//cin.get();
	return 0;
}