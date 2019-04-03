#include<iostream>
using namespace std;
int main()
{
	int N;
	cin >> N;
	for (int i = 2; i < N; i++)
	{
		int flag = 0;
		for (int j = 2; j < i; j++)
		{
			if (i%j == 0)flag++;
		}
		if (!flag)cout << i << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}