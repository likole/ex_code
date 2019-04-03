#include<iostream>
using namespace std;
int main()
{
	int N, cow[1000], index = 1;
	cow[0] = 0;
	cin >> N;
	for (int i = 0; i < N; i++)
	{
		for (int j =0; j <index; j++)
		{
			cow[j]++;
			if (cow[j] >= 4)
			{
				cow[index] = 0;
				index++;
			}
		}
	}
	cout << index << endl;
	//cin.get();
	//cin.get();
	return 0;
}