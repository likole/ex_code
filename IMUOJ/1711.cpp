#include<iostream>
using namespace std;
int main()
{
	int n, m = -99999;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int x;
		cin >> x;
		if (x > m)m = x;
	}
	cout << m << endl;
	//cin.get(); cin.get();
	return 0;
}