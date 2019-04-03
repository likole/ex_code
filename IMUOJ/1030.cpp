#include<iostream>
using namespace std;
int main()
{
	int n,s=1;
	cin >> n;
	for (int i = 1; i < n; i++)
	{
		s = (s + 1) * 2;
	}
	cout << s << endl;
	//cin.get();
	//cin.get();
	return 0;
}