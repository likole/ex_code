#include<iostream>
using namespace std;
int main()
{
	int n, s=0;
	int i;
	cin >> n;
	for (i = 1;; i++)
	{
		s += i*i*i;
		if (s > n)break;
	}
	cout << i - 1 << endl;
	return 0;
}