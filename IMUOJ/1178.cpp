#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	int count = 0;
	for (int i = 1; i < x/5; i++)
	{
		for (int j = 1; j < x/2; j++)
		{
			for (int k = 1; k < x; k++)
			{
				if (i * 5 + j * 2 + k == x) count++;
			}
		}
	}
	cout << count << endl;
	return 0;
}