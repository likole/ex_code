#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 2; i <=n; i++)
	{
		int factor = 1;
		for (int j = 1; j < i; j++)
		{
			if (i%j == 0) factor = j;
		}
		if (factor == 1) cout << i << endl;
	}
	//cin.get();
	//cin.get()//cf;
	return 0;
}