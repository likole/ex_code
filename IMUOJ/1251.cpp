#include<iostream>
using namespace std;
int main()
{
	int count = 0;
	unsigned int x;
	while (cin >> x&& x)
	{
		for (int i = 0; i <= x; i++)
		{
			if (x == i*i*i)count++;
		}
	}
	cout << count << endl;
	//cin.get();
	//cin.get();
	return 0;
}