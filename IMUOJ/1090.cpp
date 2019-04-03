#include<iostream>
using namespace std;
int num(int);
int main()
{
	int sum=0, n;
	cin >> n;
	for (int j = 0; j < n; j++)
	{
		sum += num(j + 1);
	}
	cout << sum << endl;
	cin.get();
	cin.get();
	return 0;
}
int num(int i)
{
	return i * 3 - 1;
}