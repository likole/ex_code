#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	if (a > b) swap(a, b);
	for (int i = a; i <= b; i++)
	{
		if (i % 7 == 0 && i % 10 == 1)cout << i << endl;
	}
	return 0;
}