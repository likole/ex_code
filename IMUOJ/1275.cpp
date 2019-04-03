#include<iostream>
using namespace std;
int main()
{
	int k;
	double sn=0;
	cin >> k;
	for (int n = 1;; n++)
	{
		sn += 1.0 / n;
		if (sn > k)
		{
			cout << n << endl;
			break;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}